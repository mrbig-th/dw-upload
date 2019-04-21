# DW-Upload

## Usage

This component simplifies file validation and uploading. Assume a file is uploaded with this HTML form:

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" value=""/>
        <input type="submit" value="Upload Now !"/>
    </form>

When the HTML form is submitted, the server-side PHP code can validate and upload the file like this:

    <?php
	use DwThai\DwUpload;
	$fileName =  DwUpload::DwUpload($_FILES['image'],'img/',true);
	echo 	 $fileName;
	
## How to Install

Create a composer.json file in your project root:

    {
        "require": {
            "dwthai/dw-upload": "*"
        }
    }

Install via composer:

    composer require dwthai/dw-upload

## Author

[DwThai.Com](https://www.dwthai.com)

## License

MIT Public License