#include <stdio.h>
#include <stdlib.h>

int main ()
{
    char nome[256];
    char sobrenome[256];
    int ano_nascimento;
    int idade;

    printf("Qual o seu nome?\n");
    scanf("%s", nome);
    
    printf("Show de bola, %s...Qual sua idade?\n", nome);
    scanf("%d", &idade);

    printf("Muito bom! O %s tem %d anos\n", nome, idade);

    printf("Qual seu sobrenome?\n", sobrenome);
    scanf("%s", sobrenome);

    printf("Certo o sobrenome de %s e %s", nome, sobrenome);


    return 0;
}