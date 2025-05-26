#include <stdio.h>
#include <stdlib.h>

int main ()
{
    // pedra, papel, tesoura!
    char player_1[256];
    char player_2[256];

    printf("\nPlayer 1, Sua vez...");
    scanf("%s", &player_1);

    printf("\nPlayer 2, Sua vez...");
    scanf("%s", &player_2);

    printf("\nAguarde, estamos calculando o resultado!\n");
        if(strcmp(player_1, "papel") == 0)
        {   
                if(strcmp(player_2, "papel") == 0)
                {   
                    printf("Empate!");
                } else if (strcmp(player_2, "tesoura") == 0)
                {
                    printf("Player 2 ganhou por que tesoura corta papel!");
                } else if (strcmp(player_2, "pedra") == 0)
                {
                    printf("Player 1 ganhou porque papel enbrulha a pedra!");
                } else 
                {
                    printf("Player 2, informacao invalida");
                }
        } else if (strcmp(player_1, "tesoura") == 0)
        {
                if(strcmp(player_2, "papel") == 0)
                {   
                    printf("Player 1 ganhou porque tesoura corta papel!");
                } else if (strcmp(player_2, "tesoura") == 0)
                {
                    printf("Empate!");
                } else if (strcmp(player_2, "pedra") == 0)
                {
                    printf("Player 2 ganhou porque pedra esmaga tesoura!");
                } else 
                {
                    printf("Player 2, informacao invalida");
                }

        } else if (strcmp(player_1, "pedra") == 0)
        {
            if(strcmp(player_2, "papel") == 0)
                {   
                    printf("Player 2 ganhou por que papel embrulha pedra!");
                } else if (strcmp(player_2, "tesoura") == 0)
                {
                    printf("Player 1 ganhou porque pedra esmaga tesoura!");
                } else if (strcmp(player_2, "pedra") == 0)
                {
                    printf("Empate!");
                } else 
                {
                    printf("Player 2, informacao invalida");
                }

        } else 
        {
            printf("Player 1, informacao invalida");
        }

    return 0;

}
