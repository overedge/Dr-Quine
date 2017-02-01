#include <stdio.h>
char *str = "#include <stdio.h>%cchar *str = %c%s%c;%c/*%c 42%c*/%cint main(){%c/*%c blackhat%c*/%cprintf(str, 10, 34, str, 34, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);%creturn 0;%c}%cvoid poney(){}%c";
/*
 *  42
 *  */
int main(){
	/*
	 *  blackhat
	 *  */
	printf(str, 10, 34, str, 34, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10);
	return 0;
}
void poney(){}
