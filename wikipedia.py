import requests 
from bs4 import BeautifulSoup

# Hacemos una peticion a una pagina web
url = "https://es.wikipedia.org/wiki/Portal:Actualidad"
response = requests.get(url)

# Creamos objeto
soup = BeautifulSoup(response.text, "html.parser")

#Extraemos titulo pagina
titulos = soup.find_all(["h2", "h3"])

print("Títulos de actualidad en Wikipedia:")
for titulo in titulos:
    print("-", titulo.text.strip())
