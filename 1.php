//Escreva um algoritmo que leia três números e imprima o maior deles

num_maior(x,y,z):
    if(x>y) and (x>z):
        return(x)
    elif(y>x) and (y>z):
        return(y)
    elif(z>x) and (z>y):
        return(z)
    else:
        return print("Os números sao iguais")