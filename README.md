## Getting Started

APM uses [Pluto](https://pluto-lang.org/) (a fork of Lua) as the configuration format.

1. Be sure to [install Pluto](https://pluto-lang.org/docs/Getting%20Started), if you haven't already.
2. Create a `deps.pluto` file in your project.
3. Insert the following:
```lua
;(require"http".request"//use.agnostic.pm"|>load)()
```

Now you can describe your dependencies, which can be as simple as this:

```lua
git "https://github.com/PlutoLang/pluto-websocket"
    from "websocket.pluto" to "lib/websocket.pluto"
```
But you can also restrict the version and use wildcards:

```lua
git "https://github.com/omni-wf/warframe-public-export-plus"
    version "^0.4"
    from "*.json" to "data/*.json"
```