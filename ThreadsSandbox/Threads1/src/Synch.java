// Count will not always return the same amount. 
// This is because the program is doing multiple things at the same time.
// Since 2 threads are going they are both reading the value of count on their own schedule
// Some increments are being skipped. One thread could increment 
// a thread twice when another does it once.
// One way is to make count an atomic integer.
// When dealing with threads, the best way to solve this is the
// synchronaized keyword.
// The synchronized method guarantees that only one thread can aquire the
// intrinsic log at a time. The 2nd thread has to wait for the first.

public class Synch {
	
	private int count = 0;
	public synchronized void increment(){
		count++;
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Synch synch = new Synch();
		synch.doWork();
	}
	
		public void doWork() {
			
			Thread t1 = new Thread(new Runnable(){
				public void run() {					
					for(int i = 0; i<10000; i++){
						increment();
					}
				}
			});
			
			Thread t2 = new Thread(new Runnable(){
				public void run() {					
					for(int i = 0; i<10000; i++){
						increment();
					}
				}	
			});
			
			t1.start();
			t2.start();
			
			// Join allows one thread to wait for the completion of another. 
			try {
				t1.join();
				t2.join();				
			} catch (InterruptedException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
			
			System.out.println(count);
		}
}
