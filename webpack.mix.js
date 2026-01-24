const mix = require('laravel-mix')

const path = require('path')
const directory = path.basename(path.resolve(__dirname))
const source = `platform/plugins/${directory}`
const dist = `public/vendor/core/plugins/${directory}`

mix
    .js(`${source}/resources/js/google-indexing.js`, `${dist}/js`)
    .sass(`${source}/resources/sass/google-indexing.scss`, `${dist}/css`)

if (mix.inProduction()) {
    mix.version()
}
