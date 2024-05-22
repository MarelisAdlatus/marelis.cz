# <a id="top"></a> The home page for creative people with Laravel

> The intention is to offer a gradual building of my own website.

This project runs with **Laravel version 11**

## Content

[What is done and works](#what-is-done-and-works)\
[Maybe in the future](#maybe-in-the-future)\
[Structure of content and views](#structure-of-content-and-views)\
[Script for exporting 3D files to GLB format](#script-for-exporting-3d-files-to-glb-format)\
[Releases](#releases)\
[Used libraries](#used-libraries)\
[Used services](#used-services)\
[License](#license)

## <a id="what-is-done-and-works"></a> What is done and works

- [x] New Laravel project
- [x] Support for VS Code editor
- [x] Environment setup and scaffolding
- [x] Google font replacement
- [x] Bootstrap icons
- [x] Language switching and basic welcome
- [x] Website layout with jQuery and SweetAlert2
- [x] Modal contact form with sending to email
- [x] QR code with a link to an external page
- [x] Content management and view translations
- [x] Diagrams, graphs, tables, 3D views
- [x] Translation of contact emails
- [x] Reporting software (error, help, other)
- [x] Syntax highlighting with copy button

## <a id="maybe-in-the-future"></a> Maybe in the future

- [ ] User login and registration
- [ ] User verification and password change by email
- [ ] User's time zone at registration
- [ ] User's language during registration and login
- [ ] Advanced user profile with avatar image
- [ ] User roles and permissions
- [ ] Upgrade laravel/framework to the latest version

## <a id="structure-of-content-and-views"></a> Structure of content and views

> A settings file determines which versions of views are displayed

``` bash
cat config/settings.php
<?php

return [

    'admin_email' => 'marelis.adlatus@gmail.com',

    'available_locales' => array('en', 'cs'),

    'software' => [

        'software-1' => [
            'show_version' => 'v1',
        ],
    ],

    'hardware' => [

        'hardware-1' => [
            'show_version' => 'v1',
        ],
    ],

    'model' => [

        'model-1' => [
            'show_version' => 'v1',
        ],
    ],

    'project' => [

        'project-1' => [
            'show_version' => 'v1',
        ],
    ],
];
```

> The structure of views

``` bash
resources/views
├── cs
│   ├── hardware
│   │   └── hardware-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── circuit-board.blade.php
│   │           │   ├── construction.blade.php
│   │           │   ├── diagram.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── parts.blade.php
│   │           │   ├── progress.blade.php
│   │           │   └── related.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── model
│   │   └── model-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── accessories.blade.php
│   │           │   ├── construction.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── print.blade.php
│   │           │   ├── progress.blade.php
│   │           │   └── related.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── project
│   │   └── project-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── cooperation.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── progress.blade.php
│   │           │   ├── related.blade.php
│   │           │   └── resources.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── software
│   │   └── software-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── feature.blade.php
│   │           │   ├── install.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── privacy.blade.php
│   │           │   ├── progress.blade.php
│   │           │   ├── related.blade.php
│   │           │   └── usage.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   └── welcome.blade.php
├── en
│   ├── hardware
│   │   └── hardware-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── circuit-board.blade.php
│   │           │   ├── construction.blade.php
│   │           │   ├── diagram.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── parts.blade.php
│   │           │   ├── progress.blade.php
│   │           │   └── related.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── model
│   │   └── model-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── accessories.blade.php
│   │           │   ├── construction.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── print.blade.php
│   │           │   ├── progress.blade.php
│   │           │   └── related.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── project
│   │   └── project-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── cooperation.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── progress.blade.php
│   │           │   ├── related.blade.php
│   │           │   └── resources.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   ├── software
│   │   └── software-1
│   │       └── v1
│   │           ├── content
│   │           │   ├── about.blade.php
│   │           │   ├── download.blade.php
│   │           │   ├── feature.blade.php
│   │           │   ├── install.blade.php
│   │           │   ├── license.blade.php
│   │           │   ├── privacy.blade.php
│   │           │   ├── progress.blade.php
│   │           │   ├── related.blade.php
│   │           │   └── usage.blade.php
│   │           ├── index.blade.php
│   │           └── preview.blade.php
│   └── welcome.blade.php
├── layouts
│   └── app.blade.php
└── mail
    └── contact-mail.blade.php
```

> Directory structure with files for content

``` bash
storage/app/public
└── content
    ├── hardware
    │   └── hardware-1
    │       └── v1
    ├── model
    │   └── model-1
    │       └── v1
    ├── project
    │   └── project-1
    │       └── v1
    └── software
        └── software-1
            └── v1
```

## <a id="script-for-exporting-3d-files-to-glb-format"></a> Script for exporting 3D files to GLB format

- The script runs on a Linux system, the condition is that the [Blender](https://github.com/blender/blender) application is installed (at least version 4.1.0).

- The script consists of two parts, the first is in bash, the second is in python. The part with the bash script starts.

- Supported 3D file formats for export: ABC, BLEND, DAE, FBX, OBJ, PLY, STL, USD, USDA, USDC, WRL, X3D. 

> The first action is cleanup, which is the removal of older GLB files from the selected folder.

``` bash
./export-glb.sh
Action ? (* ... local)
1) Clean
2) Export
3) Quit
#? 1
Selected action 'Clean'
Content Type ?
1) model
2) project
3) hardware
4) software
#? 1
Selected content type 'model'
Content Name ?
1) model-1
#? 1
Selected content name 'model-1'
Content Version ?
1) v1
#? 1
Selected content version 'v1'
Clean ...
removed 'public/content/model/model-1/v1/smilling-baby-groot.glb'
removed 'public/content/model/model-1/v1/glasses-3d.glb'
removed 'public/content/model/model-1/v1/yoda-bust.glb'
```

> The second action is export, which is the conversion of 3D files in the selected folder to GLB format.

``` bash
./export-glb.sh
Action ? (* ... local)
1) Clean
2) Export
3) Quit
#? 2
Selected action 'Export'
Content Type ?
1) model
2) project
3) hardware
4) software
#? 1
Selected content type 'model'
Content Name ?
1) model-1
#? 1
Selected content name 'model-1'
Content Version ?
1) v1
#? 1
Selected content version 'v1'
Export ...
Blender 4.1.0 (hash 40a5e739e270 built 2024-03-26 00:31:19)
Converting: 'yoda-bust.stl'
Import finished in 2.4188 sec.
Export: 'public/content/model/model-1/v1/yoda-bust.glb'
02:09:34 | INFO: Draco mesh compression is available, use library at /snap/blender/4697/4.1/python/lib/python3.11/site-packages/libextern_draco.so
02:09:35 | INFO: Starting glTF 2.0 export
02:09:35 | INFO: Extracting primitive: yoda-bust
02:09:36 | INFO: Primitives created: 1
02:09:36 | INFO: Draco encoder: Encoding mesh yoda-bust.
DracoEncoder | Preserve triangle order: no
DracoEncoder | Encoded 1756121 vertices, 1842681 indices, raw size: 49487844, encoded size: 7761259, compression ratio: 6.38
02:09:37 | INFO: Finished glTF 2.0 export in 2.4606785774230957 s

Converting: 'smilling-baby-groot.stl'
Import finished in 6.9972 sec.
Export: 'public/content/model/model-1/v1/smilling-baby-groot.glb'
02:09:46 | INFO: Draco mesh compression is available, use library at /snap/blender/4697/4.1/python/lib/python3.11/site-packages/libextern_draco.so
02:09:46 | INFO: Starting glTF 2.0 export
02:09:46 | INFO: Extracting primitive: smilling-baby-groot
02:09:47 | INFO: Primitives created: 1
02:09:47 | INFO: Draco encoder: Encoding mesh smilling-baby-groot.
DracoEncoder | Preserve triangle order: no
DracoEncoder | Encoded 2453952 vertices, 2464008 indices, raw size: 68745960, encoded size: 9032993, compression ratio: 7.61
02:09:48 | INFO: Finished glTF 2.0 export in 2.236790418624878 s


Blender quit
```

## <a id="releases"></a> Releases

### :white_check_mark: Release v0.3

- Content management and view translations
- Diagrams, graphs, tables, 3D views

https://github.com/MarelisAdlatus/web-marelis/releases/tag/v0.3

### :white_check_mark: Release v0.2

- Modal contact form with sending to email
- QR code with a link to an external page

https://github.com/MarelisAdlatus/web-marelis/releases/tag/v0.2

### :white_check_mark: Release v0.1

- Basic website layout with dialogs for external links

https://github.com/MarelisAdlatus/web-marelis/releases/tag/v0.1

## <a id="used-libraries"></a> Used libraries

- [bootstrap](https://github.com/twbs/bootstrap)
- [bootstrap-icons](https://github.com/twbs/icons)
- [sweetalert2](https://github.com/sweetalert2/sweetalert2)
- [apexcharts.js](https://github.com/apexcharts/apexcharts.js)
- [PapaParse](https://github.com/mholt/PapaParse)
- [model-viewer](https://github.com/google/model-viewer)
- [zoomist](https://github.com/cotton123236/zoomist)
- [glightbox](https://github.com/biati-digital/glightbox)
- [purifier](https://github.com/mewebstudio/Purifier)
- [suneditor](https://github.com/JiHong88/suneditor)
- [pako](https://github.com/nodeca/pako)
- [js-base64](https://github.com/dankogai/js-base64)

## <a id="used-services"></a> Used services

- [plantuml-server](https://github.com/plantuml/plantuml-server)
- [tomcat](https://github.com/apache/tomcat)

## <a id="license"></a> License

Licensed to the Apache Software Foundation (ASF) under one or more contributor license agreements.  See the [LICENSE](LICENSE) file distributed with this work for additional information regarding copyright ownership.  The ASF licenses this file to you under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

  https://apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the License for the specific language governing permissions and limitations under the License.

:arrow_up: [Back to top](#top)
