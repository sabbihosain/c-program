#include <stdio.h>

int main()
{
   int  i,j,rows=2;
   int a[2][2]={1,2,3,4};
   int b[2][2]={5,6,7,8};
   int  c[2][2];

  // printf("Enter the number of rows and columns of matrix\n");
  // scanf("%d%d", &m, &n);
  printf("Enter the elements of a matrix\n");

   for (i = 0; i < rows; i++)
   {
     for (j = 0; j < rows; j++)
     {
       printf("%d\t", a[i][j]);
     }
     printf("\n");
   }
   printf("Enter the elements of b matrix\n");

   for (i = 0; i < 2; i++)
   {
     for (j = 0; j < 2; j++)
     {
       printf("%d\t", b[i][j]);
     }
     printf("\n");
   }
   printf("subtraction of entered matrices:-\n");

   for (i = 0; i < 2; i++) {
      for (j = 0 ; j < 2; j++) {
         c[i][j] = a[i][j] - b[i][j];
         printf("%d\t", c[i][j]);
      }
      printf("\n");
   }

   return 0;
}
