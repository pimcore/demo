<?php 

return [
    "grid" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 350,
                    "height" => 235,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ],
            [
                "method" => "brightnessSaturation",
                "arguments" => [
                    "brightness" => 100,
                    "saturation" => 70,
                    "hue" => 100
                ]
            ],
            [
                "method" => "addOverlayFit",
                "arguments" => [
                    "path" => "src/AppBundle/Resources/thumbnail-overlay/overlay.png",
                    "composite" => "COMPOSITE_DEFAULT"
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "grid",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565344340,
        "creationDate" => 1562150477,
        "id" => "grid"
    ],
    "cart" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => 90,
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "cart",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1562311619,
        "creationDate" => 1562252277,
        "id" => "cart"
    ],
    "galleryThumbnail" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 330,
                    "height" => 220,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "galleryThumbnail",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1564138711,
        "creationDate" => 1563541372,
        "id" => "galleryThumbnail"
    ],
    "galleryLightbox" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => 900,
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "galleryLightbox",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1563541438,
        "creationDate" => 1563541426,
        "id" => "galleryLightbox"
    ],
    "content" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => 1140,
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "content",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 95,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1564399883,
        "creationDate" => 1563542883,
        "id" => "content"
    ],
    "featurerette" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 450,
                    "height" => 229,
                    "positioning" => "center",
                    "forceResize" => TRUE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "featurerette",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1564138258,
        "creationDate" => 1563545716,
        "id" => "featurerette"
    ],
    "exampleCombined1" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => "275"
                ]
            ],
            [
                "method" => "roundCorners",
                "arguments" => [
                    "width" => "10",
                    "height" => "10"
                ]
            ],
            [
                "method" => "rotate",
                "arguments" => [
                    "angle" => "10"
                ]
            ],
            [
                "method" => "addOverlay",
                "arguments" => [
                    "path" => "/web/static/images/logo-overlay.png",
                    "x" => "10",
                    "y" => "10",
                    "origin" => "bottom-right",
                    "alpha" => "100",
                    "composite" => "COMPOSITE_DEFAULT"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleCombined1"
    ],
    "exampleCombined2" => [
        "items" => [
            [
                "method" => "frame",
                "arguments" => [
                    "width" => "275",
                    "height" => "150"
                ]
            ],
            [
                "method" => "grayscale",
                "arguments" => ""
            ],
            [
                "method" => "setBackgroundColor",
                "arguments" => [
                    "color" => "#ff6600"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleCombined2"
    ],
    "exampleContain" => [
        "items" => [
            [
                "method" => "contain",
                "arguments" => [
                    "width" => "275",
                    "height" => "150"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleContain"
    ],
    "exampleCorners" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => "275",
                    "height" => "150",
                    "positioning" => "center",
                    "doNotScaleUp" => "1"
                ]
            ],
            [
                "method" => "addOverlay",
                "arguments" => [
                    "path" => "/web/static/images/logo-overlay.png",
                    "x" => "10",
                    "y" => "10",
                    "origin" => "top-left",
                    "alpha" => "100",
                    "composite" => "COMPOSITE_DEFAULT"
                ]
            ],
            [
                "method" => "roundCorners",
                "arguments" => [
                    "width" => "10",
                    "height" => "10"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleCorners"
    ],
    "exampleCover" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => "275",
                    "height" => "150",
                    "positioning" => "center",
                    "doNotScaleUp" => "1"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleCover"
    ],
    "exampleFrame" => [
        "items" => [
            [
                "method" => "frame",
                "arguments" => [
                    "width" => "275",
                    "height" => "150"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleFrame"
    ],
    "exampleGrayscale" => [
        "items" => [
            [
                "method" => "frame",
                "arguments" => [
                    "width" => "275",
                    "height" => "150"
                ]
            ],
            [
                "method" => "grayscale",
                "arguments" => ""
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleGrayscale"
    ],
    "exampleMask" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 275,
                    "height" => 150,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ],
            [
                "method" => "applyMask",
                "arguments" => [
                    "path" => "/web/static/images/mask-example.png"
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "exampleMask",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565342371,
        "creationDate" => 1565342349,
        "id" => "exampleMask"
    ],
    "exampleOverlay" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => "275",
                    "height" => "150",
                    "positioning" => "centerleft",
                    "doNotScaleUp" => "1"
                ]
            ],
            [
                "method" => "addOverlay",
                "arguments" => [
                    "path" => "/web/static/images/logo-overlay.png",
                    "x" => "10",
                    "y" => "10",
                    "origin" => "top-left",
                    "alpha" => "75",
                    "composite" => "COMPOSITE_DEFAULT"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleOverlay"
    ],
    "exampleResize" => [
        "items" => [
            [
                "method" => "resize",
                "arguments" => [
                    "width" => "275",
                    "height" => "150"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleResize"
    ],
    "exampleRotate" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => "275"
                ]
            ],
            [
                "method" => "rotate",
                "arguments" => [
                    "angle" => "5"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleRotate"
    ],
    "exampleScaleHeight" => [
        "items" => [
            [
                "method" => "scaleByHeight",
                "arguments" => [
                    "height" => "150"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleScaleHeight"
    ],
    "exampleScaleWidth" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => "275"
                ]
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleScaleWidth"
    ],
    "exampleSepia" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => "275"
                ]
            ],
            [
                "method" => "sepia",
                "arguments" => ""
            ]
        ],
        "medias" => [

        ],
        "description" => "",
        "format" => "SOURCE",
        "quality" => 90,
        "highResolution" => 0,
        "filenameSuffix" => NULL,
        "id" => "exampleSepia"
    ],
    "product_detail" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => 700,
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "product_detail",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565167949,
        "creationDate" => 1565167920,
        "id" => "product_detail"
    ],
    "product_detail_small" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 150,
                    "height" => 100,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "product_detail_small",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565169325,
        "creationDate" => 1565169289,
        "id" => "product_detail_small"
    ],
    "product_detail_manufacturer" => [
        "items" => [
            [
                "method" => "scaleByWidth",
                "arguments" => [
                    "width" => 100,
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "product_detail_manufacturer",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565170957,
        "creationDate" => 1565170947,
        "id" => "product_detail_manufacturer"
    ],
    "galleryCarousel" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 1140,
                    "height" => 500,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [
            "940w" => [
                [
                    "method" => "cover",
                    "arguments" => [
                        "width" => 940,
                        "height" => 411,
                        "positioning" => "center",
                        "forceResize" => FALSE
                    ]
                ]
            ],
            "720w" => [
                [
                    "method" => "cover",
                    "arguments" => [
                        "width" => 720,
                        "height" => 320,
                        "positioning" => "center",
                        "forceResize" => FALSE
                    ]
                ]
            ],
            "320w" => [
                [
                    "method" => "cover",
                    "arguments" => [
                        "width" => 320,
                        "height" => 140,
                        "positioning" => "center",
                        "forceResize" => FALSE
                    ]
                ]
            ]
        ],
        "name" => "galleryCarousel",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565347087,
        "creationDate" => 1565346856,
        "id" => "galleryCarousel"
    ],
    "galleryCarouselPreview" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 100,
                    "height" => 54,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "galleryCarouselPreview",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565346948,
        "creationDate" => 1565346938,
        "id" => "galleryCarouselPreview"
    ],
    "portalCarousel" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 1920,
                    "height" => 600,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [
            "1280w" => [
                [
                    "method" => "cover",
                    "arguments" => [
                        "width" => 1280,
                        "height" => 500,
                        "positioning" => NULL,
                        "forceResize" => FALSE
                    ]
                ]
            ],
            "768w" => [
                [
                    "method" => "cover",
                    "arguments" => [
                        "width" => 768,
                        "height" => 650,
                        "positioning" => "center",
                        "forceResize" => FALSE
                    ]
                ]
            ]
        ],
        "name" => "portalCarousel",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565357033,
        "creationDate" => 1565355190,
        "id" => "portalCarousel"
    ],
    "heroGrid" => [
        "items" => [
            [
                "method" => "cover",
                "arguments" => [
                    "width" => 952,
                    "height" => 470,
                    "positioning" => "center",
                    "forceResize" => FALSE
                ]
            ]
        ],
        "medias" => [

        ],
        "name" => "heroGrid",
        "description" => "",
        "group" => "",
        "format" => "SOURCE",
        "quality" => 85,
        "highResolution" => 0.0,
        "preserveColor" => FALSE,
        "preserveMetaData" => FALSE,
        "rasterizeSVG" => FALSE,
        "downloadable" => FALSE,
        "modificationDate" => 1565359326,
        "creationDate" => 1565359271,
        "id" => "heroGrid"
    ]
];
