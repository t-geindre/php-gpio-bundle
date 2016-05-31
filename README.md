# PHP-GPIO-BUNDLE

Provide Symfony integration for PHP-GPIO library.

## Configuration

```yml
php_gpio:
    servers:
        default: # All providers by default
            interface: 127.0.0.1 # Should not be public
            port: 8090
        second:
            interface: 127.0.0.1 # Should not be public
            port: 8091
            providers: # A server with specific providers
                - gpio
                - mcp3008
```
