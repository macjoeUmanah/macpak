# MACPAK

Create random jokes in your next PHP project

## Installation

Require the package using composer

```bash
composer require macjoeUmanah/macpak
```

## Usage

```php
use MacjoeUmanah\MacPak\JokeFactory;
$jokes= new JokeFactory();
$joke= $jokes->getRandomJoke();
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
