# Symphony CMS

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.0-8892BF.svg?style=flat)](https://php.net/)
[![Join the chat at https://gitter.im/symphonycms/symphony-2](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/symphonycms/symphony-2)
[![Licence](https://img.shields.io/badge/licence-MIT-brightgreen.svg?style=flat)](https://symphonycms.mit-license.org/)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fsymphonycms%2Fsymphony-2.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Fsymphonycms%2Fsymphony-2)

This is a fork of Symphony CMS with fixes made for PHP versions 7 and 8. It will not run on PHP 5.6.

- Version: 3.0.0 (special)
- Date: 8th December 2020
- [Release notes](https://www.getsymphony.com/download/releases/version/3.0.0/)
- [Changelog](https://github.com/petertron/symphonycms/blob/3.0.0/CHANGELOG.md)
- [Github repository](https://github.com/petertron/symphonycms/tree/3.0.0)
- [MIT Licence](https://github.com/petertron/symphonycms/blob/master/LICENCE)

## Contents

* [Overview](#overview)
* [Server requirements](#server-requirements)
* [Responsible Security Disclosure](#responsible-security-disclosure)

## Quick links

* [Installing](.docs/dev/INSTALLING.md)
* [Updating from LTS](.docs/dev/UPDATING.md)
* [Contributing](.docs/dev/CONTRIBUTING.md)
* [Documentation TOC](.docs/TOC.md)

## Overview

Symphony is a `PHP` & `MySQL` based CMS that utilises `XML` and `XSLT` as its core technologies. This repository represents version `3.0.0` and is considered stable.

Useful places:

- [The Symphony website](https://www.getsymphony.com/)
- [The Symphony forum](https://www.getsymphony.com/discuss/)
- [Symphony Extensions](http://symphonyextensions.com/)
- [DEV chat room](https://gitter.im/symphonycms/symphony-2)
- [HELP chat room](https://gitter.im/symphonycms/symphony-2/help)

## Server requirements

- PHP 7.x or 8.0
- PHP’s LibXML module, with the XSLT extension enabled (`--with-xsl`)
- MySQL 5.7 or above is recommended
- A webserver (known to be used with Apache, Litespeed, Nginx and Hiawatha)
- Apache’s `mod_rewrite` module or equivalent
- PHP’s built in `json` functions, which are enabled by default in PHP 5.2 and above; if they are missing, ensure PHP wasn’t compiled with `--disable-json`
- PHP’s `zlib` module
- PHP’s `pdo_mysql` module

## Responsible Security Disclosure

Please follow [the guideline for security bug disclosure](https://github.com/symphonycms/symphonycms/wiki/Security-Bug-Disclosure).
