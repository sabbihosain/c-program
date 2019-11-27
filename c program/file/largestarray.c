#include <stdio.h>
int main()
{
   int i,j,n=6,temp=0;
   int  a[]={6,4,7,9,7,3};
   for(i=0; i<n; i++)
   {
       for(j=0; j<n; j++)
       {
         if(a[j]>a[j+1])
         {
             temp=a[j];
             a[j]=a[j+1];
             a[j+1]=temp;
         }
       }
   }
       printf("%d",a[j]);

   return 0;
}
