import string
import random

longitud = int(input("Ingrese el tamaño de la contraseña: "))

caracter = string.ascii_letters + string.digits + string.punctuation

contraseña = "".join(random.choice(caracter)for i in range(longitud))

print("la contraseña generada es: "+contraseña)