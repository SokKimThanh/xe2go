@echo off
setlocal enabledelayedexpansion
set count=1
set folderName=vinfast

:: Specify the target directory
set targetDir="D:\School\HK5\Intern\xe2go\public\images\trang_gallery\hangxe_logo\!folderName!"

:: Change to the target directory
pushd %targetDir%

for %%f in (*) do (
    ren "%%f" "p-!folderName!-!count!%%~xf"
    set /a count+=1
)

:: Return to the original directory
popd
