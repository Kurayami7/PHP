import java.util.Scanner;

import javax.naming.event.NamespaceChangeListener;

import java.util.ArrayList;
import java.util.Random;

class Main {
    public static void main (String [] args) {
        System.out.println("Hello World");


        ArrayList<String> listOfNames = new ArrayList<>();
        Scanner scanner = new Scanner(System.in);
        String userInput = "";

        System.out.println("Enter names, send 'quit' to quit: ");

        while (!userInput.equals("quit")) {
            userInput = scanner.nextLine();
            listOfNames.add(userInput);

            if (userInput.equals("quit")) {
                System.out.println("Program exited successfully");
                listOfNames.remove("quit"); 
            }
        }

        for (String i : listOfNames) {
            System.out.println("Name(s): " + i);
        }

        Random random = new Random();
        int randomNumber = random.nextInt(listOfNames.size());
        String win = listOfNames.get(randomNumber);
        System.out.println("The winner is " + win);

        int randomNumber2 = random.nextInt(listOfNames.size());
        String win2 = listOfNames.get(randomNumber2);
        System.out.println("The winner this time is " + win2);
        listOfNames.remove(randomNumber2);



        int randomNumber3 = random.nextInt(listOfNames.size());
        String win3 = listOfNames.get(randomNumber3);
        System.out.println("The third winner is now " + win3);
        listOfNames.remove(randomNumber3);
    }
}