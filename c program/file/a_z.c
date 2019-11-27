#include <stdio.h>
int main()
{
   char ch;
   for(ch='a'; ch<='z'; ch++)
   {
     printf("%c ",ch);
   }
    printf("\n");

   for(ch='z'; ch>='a'; ch--)
   {
     printf("%c ",ch);
   }
   printf("\n");
   for(ch='A'; ch<='Z'; ch++)
   {
     printf("%c ",ch);
   }
      printf("\n");

   for(ch='Z'; ch>='A'; ch--)
   {
     printf("%c ",ch);
   }
  return 0;
}

