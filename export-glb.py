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

# Export 3D files to GLB format

# GLB is a standardized file format for sharing 3D data used in virtual reality,
# augmented reality, games, and online applications.
# GLB files are a binary form of the GL Transmission Format (glTF) file,
# which employs JSON (JavaScript Object Notation) encoding.

import bpy
import os
import sys

cwd = os.getcwd()

force_continue = True

for current_argument in sys.argv:

    if force_continue:
        if current_argument == "--":
            force_continue = False
        continue

    # giving directory name
    dirname = current_argument
    
    # giving file extension
    ext = ('.abc', 'blend', 'dae', 'fbx', 'obj', 'ply', 'stl', 'usd', 'usda', 'usdc', 'wrl', 'x3d' )
    
    # iterating over all files
    for filename in os.listdir(dirname):

        if filename.endswith(ext):

            bpy.ops.wm.read_factory_settings(use_empty=True)
            print("Converting: '" + filename + "'")

            root, extension = os.path.splitext(filename)
            basename = os.path.basename(root)

            import_file = dirname + "/" + filename

            if extension == ".abc":
                bpy.ops.wm.alembic_import(filepath=import_file)
            if extension == ".blend":
                bpy.ops.wm.open_mainfile(filepath=import_file)
            if extension == ".dae":
                bpy.ops.wm.collada_import(filepath=import_file)
            if extension == ".fbx":
                bpy.ops.import_scene.fbx(filepath=import_file)
            if extension == ".obj":
                bpy.ops.import_scene.obj(filepath=import_file)
            if extension == ".ply":
                bpy.ops.import_mesh.ply(filepath=import_file)
            if extension == ".stl":
                bpy.ops.import_mesh.stl(filepath=import_file)
            if (
                extension == ".usd"
                or extension == ".usda"
                or extension == ".usdc"
            ):
                bpy.ops.wm.usd_import(filepath=import_file)
            if extension == ".wrl" or extension == ".x3d":
                bpy.ops.import_scene.x3d(filepath=import_file)

            export_file = dirname + "/" + basename + ".glb"
            print("Export: '" + export_file + "'")

            bpy.ops.export_scene.gltf(
                filepath=export_file,
                check_existing=True,
                export_format="GLB",
                export_draco_mesh_compression_enable=True
            )
        else:
            continue
