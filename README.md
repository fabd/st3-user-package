# Sublime Text 3 Config

Nothing to see here. Just a backup of my ST 3 config.

`.gitignore`: https://github.com/4sStylZ/SublimeText3Settings


```
$ cd ~/.config/sublime-text-3/Packages/User
```

## Configs

**Sublime** : 
[Color Schemes](https://www.sublimetext.com/docs/3/color_schemes.html) -
[Project files](https://www.sublimetext.com/docs/3/projects.html) -
[Scope naming](https://www.sublimetext.com/docs/3/scope_naming.html) -
[Themes](https://www.sublimetext.com/docs/3/themes.html)

**Plugins** : 
[Bracket Highlighter](http://facelessuser.github.io/BracketHighlighter/usage/)- 
[JsPrettier](https://www.npmjs.com/package/sublime-js-prettier#settings)



## Awesome Packages

* [AllAutocomplete](https://github.com/alienhard/SublimeAllAutocomplete)


## Notes

- Always edit **Settings - User** to configure packages. Changes made to **Settings - Default** are stored outside of the User folder and won't be synced!

## Restore / Install to new setup

- Install Sublime Text 3
- Launch > Ctrl Shift P > Install Package Control > Quit
- `rm -rf ~/.config/sublime-text-3/Packages/User/` (git clone won't overwrite folder)
- `git clone https://github.com/fabd/st3-user-package.git ~/.config/sublime-text-3/Packages/User/`
- Launch Sublime Text -- it will restore packages (cf. `Package Control.sublime-settings` file)

- Review/Push/pull config updates with eg. Sublime Merge
