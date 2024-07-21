## Getting Started

> [!WARNING]
> APM currently depends on Pluto 0.10.0, which is still in development.

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
    from "websocket.pluto" to "lib/websocket.pluto"
```
But you can also restrict the version and use wildcards:

```elixir
git "https://github.com/omni-wf/warframe-public-export-plus"
    version "^0.4"
    from "*.json" to "data/*.json"
```

To install and update your dependencies, simply run the `deps.pluto` script, which can be done by entering `pluto deps.pluto` into a command prompt, or [using the build system editor integration](https://pluto-lang.org/docs/Editor%20Integration), if supported.
