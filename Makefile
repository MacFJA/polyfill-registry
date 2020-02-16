SHELL := /bin/bash
.DEFAULT_GOAL := help
.PHONY: install add render_list format_registry generate_all qa_ut help

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

add:               ## Add a new polyfill into the registry
	@php tools/add-new.php
	$(MAKE) generate_all

render_list:       ## Generate the LIST.md file
render_list: format_registry LIST.md

format_registry:   ## Sort registry entry and make sure that everything is in the right place
format_registry: resources/registry.json
	@cat resources/registry.json |\
		$(JQ) 'sort_by(.name) | [ .[] | {name, type, require: (.require // {}), replace: (.replace // {}), functions: (.functions // []), classes: (.classes // []), constants: (.constants // [])} ]'\
		> resources/.tmp.registry.json
	@rm resources/registry.json
	@mv resources/.tmp.registry.json resources/registry.json
	@echo Polyfill registry formated!

generate_all:      ## Generate all automatic files
generate_all: format_registry render_list

qa_ut:             ## Run QA & Unit tests
qa_ut: build

#
# Files generation targets
#---------------------------

COMPOSER=docker run -it --rm --user $(USER) --volume $(PWD):/app --volume ~/.composer:/tmp composer
JINJA2=docker run -i --rm --volume $(PWD)/resources/template:/data:ro jlesage/render-template data/LIST.md.j2 data/tmp.json
PHPQA=docker run -it --rm --volume $(PWD):/app -w /app --user $(USER) polyfill-registry-phpqa

vendor: composer.json
	$(COMPOSER) install --ignore-platform-reqs

LIST.md: resources/registry.json resources/template/LIST.md.j2
	@{ echo '{"var":'; cat resources/registry.json; echo "}"; } > resources/template/tmp.json
	@$(JINJA2) > LIST.md
	@rm resources/template/tmp.json
	@echo LIST.md updated!

build: .docker/phpqa/Dockerfile lib/*
	$(PHPQA) /composer/vendor/bin/phpqa --buildDir=build/ --tools=phpcs:0,phpmd:0,phpstan:0,psalm:0,parallel-lint:0,phpunit:0,phpmetrics,phploc,phpcpd:0 --analyzedDirs=lib/ --report

#
# Utilities
#----------------------------

.docker/phpqa/Dockerfile:
	docker build -t polyfill-registry-phpqa .docker/phpqa/

help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'
