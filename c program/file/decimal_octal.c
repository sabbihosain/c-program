#include <stdio.h>
int main()
{
   int octal,decimal=0,i=0,rev;
   scanf("%d",&octal);
   while(octal!=0)
   {
      rev=octal%10;
      decimal+=rev*pow(8,i);
      octal/=10;
      i++;
   }
   printf("%d",decimal);
  return 0;
}

