#!/bin/bash

run() {
    # Run the compilation process.

    echo "Setting HOMEBREW_RELOCATE_BUILD_PREFIX to 1 so we can skip a lot of compiling... (beta feature)"
    export HOMEBREW_RELOCATE_BUILD_PREFIX=1
    cache_folder="${PLATFORM_CACHE_DIR}/.linuxbrew"
    cache_file="$cache_folder/cached_components"
    echo "Cache folder $cache_folder"
    echo "Cache file $cache_file"
    echo "Current folder $(pwd)"
    # check if we have brew installed
    if [ ! -f "$cache_folder/bin/brew" ];
    then
        install_brew
    else
        copy_lib_from_cache
    fi

    load_brew

    # Check to see if the cache file exists
    if [ ! -f ${cache_file} ];
    then
        echo "" > $cache_file
    fi

    # check if cache_contents actually matches what we want
    cache_contents=$(<"$cache_file")
    if [[ "$cache_contents" != "$@" ]]; then
        # Not the same components, so reinstall
        install_components $@
        copy_lib_to_cache $@
        echo "$@" > $cache_file
    else
        echo "Same components, nothing to be installed"
    fi

    # Always write the .profile file, so that we can be sure that all bins are immediately ready for use
    write_profile

}

copy_lib_to_cache() {
    echo "Copy to cache... #files copied: "
    cp -Rvf $PLATFORM_APP_DIR/.linuxbrew $PLATFORM_CACHE_DIR | wc -l
}

copy_lib_from_cache() {
    echo "Copy from cache... #files copied: "
    cp -Rvf $PLATFORM_CACHE_DIR/.linuxbrew $PLATFORM_APP_DIR | wc -l
}

install_brew() {
    echo "Installing homebrew"
    mkdir -p $PLATFORM_APP_DIR/.linuxbrew

    echo "Downloading tarball from master repository"
    curl -SsL https://github.com/Homebrew/brew/tarball/master -o brew.tar.gz

    echo "Unpacking into .linuxbrew folder"
    tar xzf brew.tar.gz --strip-components 1 -C $PLATFORM_APP_DIR/.linuxbrew/
    rm brew.tar.gz

    copy_lib_to_cache
}

load_brew() {
    eval $($PLATFORM_APP_DIR/.linuxbrew/bin/brew shellenv)
    brew analytics off
}

install_components() {
  components_to_install="$@"
  echo "Installing components: '$components_to_install'"
  for f in $components_to_install
  do
      echo "Installing component: '$f'"
      install_component $f
  done
}

install_component() {
    # the ls --versions checks if the package is already installed or not, handy if we copied it from cache
    brew ls --versions $1 || brew install $1
}

write_profile() {
  #touch /app/.profile
  echo "" >> $PLATFORM_APP_DIR/.environment
  echo 'export HOMEBREW_CELLAR="'$PLATFORM_APP_DIR'/.linuxbrew/Cellar";' >> $PLATFORM_APP_DIR/.environment
  echo 'export HOMEBREW_REPOSITORY="'$PLATFORM_APP_DIR'/.linuxbrew/Homebrew";' >> $PLATFORM_APP_DIR/.environment
  echo 'export PATH="'$PLATFORM_APP_DIR'/.linuxbrew/bin:'$PLATFORM_APP_DIR'/.linuxbrew/sbin${PATH+:$PATH}";' >> $PLATFORM_APP_DIR/.environment
  echo 'export MANPATH="'$PLATFORM_APP_DIR'/.linuxbrew/share/man${MANPATH+:$MANPATH}:";' >> $PLATFORM_APP_DIR/.environment
  echo 'export INFOPATH="'$PLATFORM_APP_DIR'/.linuxbrew/share/info:${INFOPATH:-}";' >> $PLATFORM_APP_DIR/.environment

}

echo "Installing: $@"
run $@
