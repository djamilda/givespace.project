# Setup local git merge driver to keep local changes for routes/web.php
Write-Host "Configuring git merge driver 'ours' for this repository..."
git config merge.ours.driver true
if ($LASTEXITCODE -ne 0) {
    Write-Host "Failed to run git config — ensure git is installed and repository exists." -ForegroundColor Red
    exit 1
}
Write-Host "Configured merge.ours.driver = true"
Write-Host "Note: .gitattributes has 'routes/web.php merge=ours' — this keeps your local file during merges."
Write-Host "To undo: git config --unset merge.ours.driver"
