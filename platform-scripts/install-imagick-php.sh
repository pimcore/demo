#!/usr/bin/env bash

cd "${PLATFORM_CACHE_DIR}" || exit 1
export MAGICK_ROOT="${PLATFORM_APP_DIR}/magick"
curl -C - -LO 'https://pecl.php.net/get/imagick-3.7.0.tgz'
curl -C - -LO 'https://imagemagick.org/archive/binaries/magick'

chmod +x magick
if test ! -d 'squashfs-root'; then
  ./magick --appimage-extract
fi
cp -r squashfs-root/usr "${MAGICK_ROOT}"

if test ! -d 'imagick-3.7.0'; then
  tar xf 'imagick-3.7.0.tgz'
fi

cd 'imagick-3.7.0' || exit 1
phpize
LDFLAGS="-L${MAGICK_ROOT}/lib" PKG_CONFIG_PATH="${MAGICK_ROOT}/lib/pkgconfig" CFLAGS="-I${MAGICK_ROOT}/include/ImageMagick-7/" ./configure --with-imagick="${MAGICK_ROOT}" --with-libdir="${MAGICK_ROOT}/lib"
make
cp -r modules "${MAGICK_ROOT}/"
