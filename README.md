# README #

Default theme for WP Bedrock Builds

# Prepare build/watch assets #

Copy .example files in to project root folder (outside theme folder) end remove .example

```bash
webpack.mix.js.example -> webpack.mix.js
tailwind.config.js.example -> tailwind.config.js
postcss.config.js.example -> postcss.config.js
package.json.example -> package.json
```
# Add folowong in to project root .gitignore #

Preventig commit compiled dev files.

NOTE: We commiting minified versions be sure that before code push to the server you run  `$ one npm run prod`

```bash
# Assets
web/app/themes/no-silver-bullets/dist/styles.css
web/app/themes/no-silver-bullets/dist/main.js
```

# Update theme name across repo from no-silver-bullets to apropiate project name #

NOTE: themes/no-silver-bullets/src/main.js instead THEME_NAME rename to aproperiate theme name 

NOTE: Do not update `no-silver-bullets` in composer.json or composer.lock in a project root

# Build acssets, create dist folder #

```bash
$ one npm run dev
```

# Run scripts from package.json when files change. #

```bash
$ one npm run watch
```

# Run scripts to bundle assets for production #

```bash
$ one npm run prod
```

```bash
TODO: Update regarding SVG assets usage
TODO: Update some info regarding style version controling
```

