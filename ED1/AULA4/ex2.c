#include <stdio.h>
#include <stdlib.h>

int main(){
    int v1; // Declara a primeira vairável
    int v2; // Declara a segunda variável

    if(&v1 > &v2){ // Se o valor do ENDEREÇO de v1 for maior que v2
        printf("\n\nO endereço da variável v1 é maior que a de v2: %x\n\n", &v1); // Imprime a mensagem e o endereço de v1
    }else if(&v2 > &v1){ // Se o valor do ENDEREÇO de v2 for maior que v1
        printf("\n\nO endereço da variável v2 é maior que a de v1: %x\n\n", &v2); // Imprime a mensagem e o endereço de v2
    }
}