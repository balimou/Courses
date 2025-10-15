#include <stdio.h>

int main() {
    int n;

    // Read the size of the square matrix
    printf("Enter size of square matrix (n x n): ");
    scanf("%d", &n);

    int arr[n][n],i,j;

    // Read the matrix elements
    printf("Enter the elements of the matrix:\n");
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
			    printf("arr[%d][%d]",i,j);
            scanf("%d", &arr[i][j]);
        }
    }
	// Print the source matrix
	printf("\nMatrix before swapping lower and upper triangles:\n");
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            printf("%d ", arr[i][j]);
        }
        printf("\n");
    }
    // Swap lower triangle with upper triangle
    // (perform symmetry across the main diagonal)
    for (i = 0; i < n; i++) {
        for (j = i + 1; j < n; j++) {
            int temp = arr[i][j];
            arr[i][j] = arr[j][i];
            arr[j][i] = temp;
        }
    }
	// Print the resulting matrix
    printf("\nMatrix after swapping lower and upper triangles:\n");
    for (i = 0; i < n; i++) {
        for (j = 0; j < n; j++) {
            printf("%d ", arr[i][j]);
        }
        printf("\n");
    }

    return 0;
}


