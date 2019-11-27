#include <stdio.h>
int main()
{
   int i,n=6,temp=0;
   int  a[]={6,4,7,9,7,3};
   for(i=0; i<n; i++)
   {
     temp+=a[i];
   }
   printf("%d",temp);
   return 0;
}
