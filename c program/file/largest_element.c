#include <stdio.h>
int main()
{
    char arr[]={7,9,6,5};
    int i,n=5;
    for(i = 0; i < n; ++i)
    {
       if(arr[0] < arr[i])
           arr[0] = arr[i];
    }
    printf("Largest element = %d", arr[0]);

    return 0;
}

