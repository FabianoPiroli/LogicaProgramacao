#include <stdio.h>
#include <stdlib.h>

int main ()
{
    char nome[256];
    int idade;

    printf("Ola qual seu nome?\n");
    scanf("%s", &nome);

    printf("Qual sua idade?\n");
    scanf("%d", &idade);

    printf("Nome: %s\nIdade: %d\n", nome, idade);

    printf("Aguarde enquanto lemos seus dados...\n");

    printf("A primeira letra do seu nome e: %c", nome[0]);

    if(idade >= 18)
    {
        printf("\nVoce e adulto!\n");
    } else if (idade >= 12)
    {
        printf("\nVoce e adolecente!\n");
    } else
    {
        printf("\nVoce e crianca!\n");
    }
    

    return 0;
}
