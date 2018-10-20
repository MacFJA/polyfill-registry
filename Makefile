SHELL := /bin/bash
.DEFAULT_GOAL := help
.PHONY: install render_list qa_ut

PWD = $(shell pwd)
USER = $(shell id -u):$(shell id -g)

##
## Application specific targets
##-------------------------------------

install:           ## Install project dependencies
install: vendor

render_list:       ## Generate the LIST.md file
render_list: LIST.md

qa_ut:             ## Run QA & Unit tests
qa_ut:
	php vendor/bin/phpqa --tools=phpcs:0,phpmd:0,phpstan:0,psalm:0,parallel-lint:0,phpunit:0,phpmetrics,phploc,phpcpd:0 --analyzedDirs=lib/ --report

#
# Files generation targets
#---------------------------

COMPOSER=docker run -it --rm --user $(USER) --volume $(PWD):/app composer
JINJA2=docker run -i --rm --volume $(PWD)/resources/template:/data -e TEMPLATE=LIST.md.j2 solocal/jinja2

vendor: composer.json
	$(COMPOSER) install

LIST.md: resources/registry.json
	@{ echo '{"var":'; cat resources/registry.json; echo "}"; } \
		| xargs --null -I % $(JINJA2) % > LIST.md

#
# Utilities
#----------------------------

help:
	@fgrep -h "##" $(MAKEFILE_LIST) | fgrep -v fgrep | sed -e 's/\\$$//' | sed -e 's/##//'
