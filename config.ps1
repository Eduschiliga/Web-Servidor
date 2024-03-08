try{
    python --version
} catch {
    winget install python.python.3.11
}

python -m venv venv
.\venv\Scripts\Activate
pip install -r requirements.txt

