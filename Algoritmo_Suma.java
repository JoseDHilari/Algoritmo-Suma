import java.util.Scanner;

public class Algoritmo_Suma {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Ingresa el primer número: ");
        int num1 = scanner.nextInt();

        System.out.print("Ingresa el segundo número: ");
        int num2 = scanner.nextInt();

        int suma = num1 + num2;

        System.out.println("La suma es: " + suma);
        
        scanner.close();
    }
}
