# Uploader @KadokWeb

[![Maintainer](http://img.shields.io/badge/maintainer-@kadokweb-blue.svg?style=flat-square)](https://twitter.com/kadokweb)
[![Source Code](http://img.shields.io/badge/source-kadokweb/uploader-blue.svg?style=flat-square)](https://github.com/kadokweb/uploader)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/kadokweb/uploader.svg?style=flat-square)](https://packagist.org/packages/kadokweb/uploader)
[![Latest Version](https://img.shields.io/github/release/kadokweb/uploader.svg?style=flat-square)](https://github.com/kadokweb/uploader/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/kadokweb/uploader.svg?style=flat-square)](https://scrutinizer-ci.com/g/kadokweb/uploader)
[![Quality Score](https://img.shields.io/scrutinizer/g/kadokweb/uploader.svg?style=flat-square)](https://scrutinizer-ci.com/g/kadokweb/uploader)
[![Total Downloads](https://img.shields.io/packagist/dt/kadokweb/uploader.svg?style=flat-square)](https://packagist.org/packages/kadokweb/uploader)

###### Uploader is a set of small classes for sending images, files, and media received by a form of your application. The Uploader handles, validates and sends the files to your server. Image class can still handle sizes with the gd library.

Uploader é um conjunto de pequenas classes para envio de imagens, arquivos e midias recebidos por um formulário de sua aplicação. O Uploader trata, valida e envia os arquivos a seu servidor. A classe de imagem ainda consegue tratar tamanhos com a biblioteca gd.

## About KadokWeb

###### KadokWeb is a set of small and optimized PHP components for common tasks. Held by Doka Silva and the kadokweb team. With them you perform routine tasks with fewer lines, writing less and doing much more.

KadokWeb é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Doka Silva e a equipe kadokweb. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Image simple upload (Simples envio de imagems)
- File simple upload (Simples envio de arquivos)
- Media simple upload (Simples envio de midias)
- Managing directories with date schemas (Gestão de diretórios com esquema de datas)
- Validation of images, files and media by mime-types (Valida de imagens, arquivos e mídias por mime-types)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Uploader is available via Composer:

```bash
"kadokweb/uploader": "1.0.*"
```

or run

```bash
composer require KadokWeb/uploader
```

## Documentation

###### For details on how to use the upload, see a sample folder in the component directory. In it you will have an example of use for each class. KadokWeb Uploader works like this:

Para mais detalhes sobre como usar o upload, veja uma pasta de exemplo no diretório do componente. Nela terá um exemplo de uso para cada classe. KadokWeb Uploader funciona assim:

#### Upload an Image

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$image = new KadokWeb\Uploader\Image("uploads", "images", 600);

if ($_FILES) {
    try {
        $upload = $image->upload($_FILES['image'], $_POST['name']);
        echo "<img src='{$upload}' width='100%'>";
    } catch (Exception $e) {
        echo "<p>(!) {$e->getMessage()}</p>";
    }
}
```

#### Upload an File

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$file = new KadokWeb\Uploader\File("uploads", "files");

if ($_FILES) {
    try {
        $upload = $file->upload($_FILES['file'], $_POST['name']);
        echo "<p><a href='{$upload}' target='_blank'>@KadokWeb</a></p>";
    } catch (Exception $e) {
        echo "<p>(!) {$e->getMessage()}</p>";
    }
}
```

#### Upload an Media

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$media = new KadokWeb\Uploader\Media("uploads", "medias");

if ($_FILES) {
    try {
        $upload = $media->upload($_FILES['file'], $_POST['name']);
        echo "<p><a href='{$upload}' target='_blank'>@KadokWeb</a></p>";
    } catch (Exception $e) {
        echo "<p>(!) {$e->getMessage()}</p>";
    }
}
```

#### Upload by Filetype (Send)

```php
<?php
require __DIR__ . "/../vendor/autoload.php";

$postscript = new KadokWeb\Uploader\Send("uploads", "postscript", ["application/postscript"]);

if ($_FILES) {
    try {
        $upload = $postscript->upload($_FILES['file'], $_POST['name']);
        echo "<p><a href='{$upload}' target='_blank'>@KadokWeb</a></p>";
    } catch (Exception $e) {
        echo "<p>(!) {$e->getMessage()}</p>";
    }
}
```

#### Upload Multiple

```php
require __DIR__ . "/../vendor/autoload.php";

$image = new KadokWeb\Uploader\Image("uploads", "images");

try {
    foreach ($image->multiple("file", $_FILES) as $file) {
        $image->upload($file, "image-" . $file["name"], 1200);
    }
    echo "Success!";
} catch (Exception $e) {
    echo "<p>(!) {$e->getMessage()}</p>";
}
```

## Contributing

Please see [CONTRIBUTING](https://github.com/kadokweb/uploader/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email doka@kadok.com.br instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para doka@kadok.com.br em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Doka Silva](https://github.com/kadokweb) (Developer)
- [kadokweb](https://github.com/kadokweb) (Team)
- [All Contributors](https://github.com/kadokweb/uploader/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/kadokweb/uploader/blob/master/LICENSE) for more information.
