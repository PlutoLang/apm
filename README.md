## Getting Started

APM uses [Pluto](https://pluto-lang.org/) (a fork of Lua) as the configuration format.

1. Be sure to [install Pluto](https://pluto-lang.org/docs/Getting%20Started), if you haven't already.
2. Create a `deps.pluto` file in your project.
3. Insert the following:
```elixir
;(require"http".request"//use.agnostic.pm"|>load)()
```

Now you can describe your dependencies, which can be as simple as this:
```elixir
git "https://github.com/PlutoLang/pluto-websocket"
```

To install and update your dependencies, simply run the `deps.pluto` script, which can be done by entering `pluto deps.pluto` into a command prompt, or [using the build system editor integration](https://pluto-lang.org/docs/Editor%20Integration), if supported.

### Output Directory
By default, APM puts downloaded files in the working directory, but e.g. if you want a "lib" folder, you can use:
```elixir
out "lib"
```

### Version Constraints
To avoid breaking changes, you can specify acceptable versions:
```elixir
git "https://github.com/PlutoLang/pluto-websocket"
    version "^1.0"
```
The `^1.0` constraint is the same as `>=1.0 <2.0`.

## apm.yml
For the above-described usage to work, the dependency's repository must have an apm.yml in the root folder. For example, pluto-websocket's apm.yml:
```yml
lib: websocket.pluto
```
This tells APM to put the repo's websocket.pluto in your configured output directory.

### Transitive Dependencies
When making your own library that uses pluto-websocket, you can declare this in apm.yml:
```yml
depends:
    https://github.com/PlutoLang/pluto-websocket: "^1.0"
```

## Download Mode
If you have more specific requirements, you can explicitly tell APM what to download and where, hence this is called "download mode."
```elixir
git "https://github.com/PlutoLang/pluto-websocket"
    from "websocket.pluto" to "lib/websocket.pluto"
```
Wildcards and version constraints are also supported in this mode:
```elixir
git "https://github.com/calamity-inc/warframe-public-export-plus"
    version "^0.5"
    from "*.json" to "data/*.json"
```
APM will not look for an apm.yml when processing dependendencies that use this mode.
