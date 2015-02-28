// Create a thread within your method (without creating a new class)

package Demo3;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Thread t1 = new Thread(new Runnable() {
			@Override
			public void run() {
				
				for(int i=0;i<5;i++){
					System.out.println("Hello " + i);
					
					try {
						Thread.sleep(100);
					} catch (InterruptedException e) {
						// TODO Auto-generated catch block
						e.printStackTrace();
					}
				}
			}
		});
		
		t1.start();
	}

}
