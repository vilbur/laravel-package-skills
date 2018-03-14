# Skills Package For Laravel Framework
Package skills.<br>
Ready for development and installation.

1. [Create folder for package.](#create-folder-for-package)<br>
2. [Checkout repository.](#checkout-repository)<br>
3. [Set path for development installation.](#set-path-for-development-installation)<br>
4. [Install package locally.](#install-package-locally)<br>


### Create folder for package
application\packages\\__vilbur\skills__


### Checkout repository
In folder application\packages\vilbur\skills run command below.
``` bash
git init &&git remote add origin https://github.com/vilbur/laravel-package-skills.git &&git pull origin master
```


### Set path for development installation
Add to __application\composer.json__.
``` json
"repositories": {
    "skills": {
        "type": "path",
        "url": "packages/vilbur/skills",
        "options": {
            "symlink": true
        }
    }
}
```

### Install package locally
``` bash
composer require vilbur/skills @dev
```

### Test in Laravel
``` html
http://your-domain/skills
```

### Search and replace in file contents, filenames and folders
Run __ContentAndPathReplacer.exe__ and replace "skills" with your package name
