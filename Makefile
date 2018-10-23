SHELL := /bin/bash
.DEFAULT_GOAL := help
.PHONY: install render_list qa_ut format_registry generate_all

PWD = $(shell pwd)
USER = $(shell id -u):$(shell id -g)

JQ=docker run -i --rm pinterb/jq:0.0.16


##
##  __   __            ___                 __   ___  __     __  ___  __
## |__) /  \ |    \ / |__  | |    |       |__) |__  / _` | /__`  |  |__) \ /
## |    \__/ |___  |  |    | |___ |___    |  \ |___ \__> | .__/  |  |  \  |
##
# Generated at http://patorjk.com/software/taag

##
## Application specific targets
##-------------------------------------

install:           ## Install project dependencies
install: vendor

render_list:       ## Generate the LIST.md file
render_list: format_registry LIST.md

format_registry:   ## Sort registry entry and make sure that everything is in the right place
format_registry: resources/registry.json
	@cat resources/registry.json |\
		$(JQ) 'sort_by(.name) | [ .[] | {name, type, require: (.require // {}), replace: (.replace // {}), functions: (.functions // []), classes: (.classes // []), constants: (.constants // [])} ]'\
		> resources/.tmp.registry.json
	@rm resources/registry.json
	@mv resources/.tmp.registry.json resources/registry.json

generate_all:      ## Generate all automatic files
generate_all: format_registry render_list

qa_ut:             ## Run QA & Unit tests
qa_ut: build

#
# Files generation targets
#---------------------------

COMPOSER=docker run -it --rm --user $(USER) --volume $(PWD):/app composer
JINJA2=docker run -i --rm --volume $(PWD)/resources/template:/data -e TEMPLATE=LIST.md.j2 solocal/jinja2
PHPQA=docker run -it --rm --user $(USER) --volume $(PWD):/app -w /app zdenekdrahos/phpqa:v1.19.0

vendor: composer.json
	$(COMPOSER) install

LIST.md: resources/registry.json resources/template/LIST.md.j2
	@{ echo '{"var":'; cat resources/registry.json; echo "}"; } \
		| xargs --null -I % $(JINJA2) % > LIST.md

build: vendor lib/*
	$(PHPQA) php vendor/bin/phpqa --buildDir=build/ --tools=phpcs:0,phpmd:0,phpstan:0,psalm:0,parallel-lint:0,phpunit:0,phpmetrics,phploc,phpcpd:0 --analyzedDirs=lib/ --report

#
# Utilities
#----------------------------

help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'
