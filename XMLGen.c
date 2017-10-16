#include<stdio.h>
#include<stdlib.h>

void main (){
srand(time(NULL));
FILE *f = fopen("XMLData.xml", "w");
if (f == NULL)
{
    printf("Error opening file!\n");
    exit(1);
}

int T=12;
int l=0;

fprintf(f, "<?xml version=\"1.0\" standalone=\"yes\"?>\n");
fprintf(f, "<NodeA>");
for (int n=0;T>n;n++)
{	
	fprintf(f, "	<Channel>");
		l=rand()%2+1;
	fprintf(f, "		<State>%d</State>", l-1);
		l=rand()%1100+1400;
	fprintf(f, "		<Voltage>%d</Voltage>",l);
		l=rand()%100+690;
	fprintf(f, "		<Current>%d</Current>",l);
	fprintf(f, "	</Channel>");
}
fprintf(f, "</NodeA>");
//printf("Creation finished!");
fclose(f);
}
