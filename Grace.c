#include <stdio.h>
#define TEST 42
#define blackhat 666
/*
 WAWA
*/
#define FT(x) int main() {char *str = "#include <stdio.h>%c#define TEST 42%c#define blackhat 666%c/*%c WAWA%c*/%c#define FT(x) int main() {char *str = %c%s%c; FILE *fichier = fopen(%cGrace_kid.c%c, %cw%c); fprintf(fichier, str, 10, 10, 10, 10, 10, 10, 34, str, 34, 34, 34, 34, 34, 10, 10);}%cFT(42)%c"; FILE *fichier = fopen("Grace_kid.c", "w"); fprintf(fichier, str, 10, 10, 10, 10, 10, 10, 34, str, 34, 34, 34, 34, 34, 10, 10);}
FT(42)
