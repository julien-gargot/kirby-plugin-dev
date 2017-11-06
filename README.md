# Kirby dev plugin

Display a Bootstrap grid on the page to facilitate the development of the graphics integration.

## Requirement and Settings

*Designed to be used with kirby-devkit.*

Import the snippet at the end of your template:
```
snippet('dev');
```

Import plugin-dev SCSS file to build a proper grid that reads your Bootstrap project settings.
Add at the end of `assets/scss/main.scss`:
```
// D E V
@import "../../site/plugins/dev/assets/css/dev.scss";
```

## How to use

The grid is display when a “dev” class is added to the `<html>` tag.

Press `cmd + ;` key to toggle this class.

Press `cmd + space` to display the grid hover the all page.
