
```bash
ddev start
ddev npm install
ddev launch
ddev npm run dev
# reload browser window, browsersync should work now
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