package Exercicio_02;

import java.util.Scanner;

public class Main {
	
	public int[] numeros = {10, 20, 30};
	
	public static void main(String args[]) {
		Scanner scanner = new Scanner(System.in);
		double tempoAnterior = System.currentTimeMillis();
		
		String s = scanner.nextLine();
		
		
		if(Main.convertTime(System.currentTimeMillis() - tempoAnterior) >= 2) {
			if(s.length() >= 10) {
				System.out.println("Show! A mesnsagem é:"+s);
			}else {
				System.out.println("Sua mensagem é muito curta!");
			}
		} else {
			System.out.println("Ops! Você precisa esperar pelo menos 2 segundos");
			System.out.println("Vamos tentar novamente?");
			tempoAnterior = System.currentTimeMillis();
			s = scanner.nextLine();
			if(Main.convertTime(System.currentTimeMillis() - tempoAnterior) >= 2) {
				System.out.println("Agora sim!");
			}else {
				System.out.println("Você falhoe 2x! Acabamos o programa!");
			}
		}
}
		
	
	public static double convertTime(double tempo) {
		
		return tempo/1000;
	}
	

}
