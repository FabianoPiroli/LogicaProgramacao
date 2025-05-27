package Exercicio_Final;

import java.awt.Canvas;
import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.awt.image.BufferStrategy;
import javax.swing.JFrame;

public class Game extends Canvas implements Runnable, MouseListener{


	int right = 0, left = 1, up = 2, down = 3;
	int dir = right;
	int x = 0, y = 0;
	
	int maxDistance = 240;
	boolean chegou = false;
	
	public Game() {
		this.setPreferredSize(new Dimension(480,480));
	}
	
	public void update() {
		//1) Identificar a direção:
		if(dir == right)
		{
			x+=4;
		}else if(dir == left)
		{
			x-=4;
		}else if(dir == up)
		{
			y-=4;
		}else if(dir == down)
		{
			y+=4;
		}
		//2) Mudar a direção:
		if(x+50 >= 480 && y == 0)
		{
			dir = down;
		}else if(x+50 >= 480 && y+50 >= 480){
			dir = left;
		}else if(x <=0 && y+50 >= 480)
		{
			dir = up;
		}else if(x <=0 && y <= 0){
			dir = right;
		}
		
	}
	
	public void render() {
		BufferStrategy bs = this.getBufferStrategy();
		if(bs == null)
		{
			this.createBufferStrategy(3);
			return;
		}
		Graphics g = bs.getDrawGraphics();
		g.setColor(Color.BLACK);
		g.fillRect(0, 0, 480, 480);

		//
		if(dir == right)
		{
			g.setColor(Color.red);
		}else if(dir == left)
		{
			g.setColor(Color.YELLOW);
		}else if(dir == up)
		{
			g.setColor(Color.blue);
		}else if(dir == down)
		{
			g.setColor(Color.cyan);
		}
		//
		g.fillRect(x, y, 50, 50);

		g.dispose();
		bs.show();
		
	}
	
	
	public static void main(String[] args) {
		Game game = new Game();
		JFrame frame = new JFrame();
		frame.setTitle("Exercicio Logica");
		frame.add(game);
		frame.setResizable(false);
		frame.pack();
		frame.setLocationRelativeTo(null);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		frame.setVisible(true);
		new Thread(game).start();
	}

	@Override
	public void run() {
		double fps = 60.0;
		while(true) {
			update();
			render();
			try {
				Thread.sleep((int)(1000/fps));
			} catch (InterruptedException e) {}
		}
		
	}

	@Override
	public void mouseClicked(MouseEvent e) {
		// TODO Auto-generated method stub
		throw new UnsupportedOperationException("Unimplemented method 'mouseClicked'");
	}

	@Override
	public void mousePressed(MouseEvent e) {
		// TODO Auto-generated method stub
		throw new UnsupportedOperationException("Unimplemented method 'mousePressed'");
	}

	@Override
	public void mouseReleased(MouseEvent e) {
		// TODO Auto-generated method stub
		throw new UnsupportedOperationException("Unimplemented method 'mouseReleased'");
	}

	@Override
	public void mouseEntered(MouseEvent e) {
		// TODO Auto-generated method stub
		throw new UnsupportedOperationException("Unimplemented method 'mouseEntered'");
	}

	@Override
	public void mouseExited(MouseEvent e) {
		// TODO Auto-generated method stub
		throw new UnsupportedOperationException("Unimplemented method 'mouseExited'");
	}


	
}
