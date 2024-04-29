let mix = require('laravel-mix');
let fs = require('fs');
const path = require('path');

require('mix-tailwindcss');
const svgo = require('svgo');

const basePath = '';
const srcPath = `src`;
const distPath = `dist`;

const generateVersionedCSS = () => {
    const dateString = new Date().toISOString().replace(/[-:.TZ]/g, '');

    let file = fs.readFileSync(path.join('.', `${basePath}/style.css.template`));
    file = file.toString().replace(/<\$VERSION\$>/g, dateString);
    fs.writeFileSync(path.join(basePath, 'style.css'), file);
};

mix.options({
        processCssUrls: false,
    })
    .webpackConfig({
        module: {
            rules: [
                {
                    test: /\.scss/,
                    loader: 'import-glob-loader',
                },
            ]
        }
    });

mix.sass(`${srcPath}/styles.scss`, `${distPath}/`)
    .tailwind('./tailwind.config.js');

mix.js(`${srcPath}/main.js`, `${distPath}/`);

const SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');
mix.webpackConfig({
    plugins: [
        new SVGSpritemapPlugin(`icons/*.svg`, {
        output: {
            filename: `${distPath}/spritemap.svg`,
            chunk: {
                keep: false,
            },
            svgo: false
        }
        })
    ]
});

if(mix.inProduction()) {
    mix.minify(`${distPath}/main.js`);
    mix.minify(`${distPath}/styles.css`);

    mix.copy('images/', `${distPath}/images/`);
    mix.copy('fonts/', `${distPath}/fonts/`);
    
    generateVersionedCSS();
}