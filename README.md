# DDEV LaravelMix BrowserSync demo

Live reload changes in scss or js files.

- [DDEV](https://ddev.readthedocs.io/en/stable/)
- [LaravelMix](https://laravel-mix.com/)
- new [ddev-browsersync (https version)](https://github.com/drud/ddev-browsersync/pull/21#issuecomment-1302664837)

See https://my-ddev-lab.mandrasch.eu/ for more experiments.

## Local setup 

```bash
ddev start
ddev npm install
ddev launch
ddev npm run dev
# reload browser window, browsersync should display "browsersync connected"
```

## How was this created?

```bash
ddev config --project-type=php

# Install LaravelMix
# (https://laravel-mix.com/docs/6.0/installation#stand-alone-projects)
ddev npm init -y
ddev npm install laravel-mix --save-dev
# create webpack.mix.js
# add scripts to package.json

# install https-version of ddev-browsersync (currently in development)
# https://github.com/drud/ddev-browsersync/pull/21#issuecomment-1302664837
ddev get https://github.com/tyler36/ddev-browsersync/tarball/tyler36/https-support/

# ! restart needed for new config !
ddev restart
```