#!/bin/bash

# Copyright 2024 Marelis Adlatus <marelis.adlatus@gmail.com>.
#
# Licensed under the Apache License, Version 2.0 (the "License");
# you may not use this file except in compliance with the License.
# You may obtain a copy of the License at
#
#      http://www.apache.org/licenses/LICENSE-2.0
#
# Unless required by applicable law or agreed to in writing, software
# distributed under the License is distributed on an "AS IS" BASIS,
# WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
# See the License for the specific language governing permissions and
# limitations under the License.

# script termination on error
set -e

# command line - verbosity
if [[ $1 == "--verbose" ]] ; then
    set -x
fi

# all command line arguments
arguments="$@"

if ! command -v blender &> /dev/null
then
    echo "Blender could not be found"
    exit 1
fi

# content type selection
select_content_type () {
    echo "Content Type ?"
    select name in $(find "public/content" -maxdepth 1 -mindepth 1 -type d -printf '%f\n') ; do
        content_type=$name
        break;
    done
    echo "Selected content type '$content_type'"
}

# content name selection
select_content_name () {
    echo "Content Name ?"
    select name in $(find "public/content/$content_type" -maxdepth 1 -mindepth 1 -type d -printf '%f\n') ; do
        content_name=$name
        break;
    done
    echo "Selected content name '$content_name'"
}

# content version selection
select_content_version() {
    echo "Content Version ?"
    select version in $(find "public/content/$content_type/$content_name" -maxdepth 1 -mindepth 1 -type d -printf '%f\n'); do
        content_version=$version
        break;
    done
    echo "Selected content version '$content_version'"
}

# content clean
content_clean() {
    echo "Clean ..."
    find "public/content/$content_type/$content_name/$content_version" -name "*.glb" -exec rm -v {} \;
}

# content export
content_export() {
    echo "Export ..."
    blender --background --python export-glb.py -- "public/content/$content_type/$content_name/$content_version"
}

# main menu
echo "Action ? (* ... local)"
menu="Clean Export Quit"
COLUMNS=0
select action in $menu ;
do
    echo "Selected action '$action'"
    case $action in
        "Clean") select_content_type && select_content_name && select_content_version && content_clean ;;
        "Export") select_content_type && select_content_name && select_content_version && content_export ;;
    esac
    break;
done
