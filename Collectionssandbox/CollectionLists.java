import java.util.*;


public class CollectionLists {

	public static void main(String[] args) {
		// List
		  List lst = new ArrayList();   // A List contains instances of Object. Upcast ArrayList to List
	      lst.add("Lehi");            // add() takes Object. String upcast to Object implicitly
	      lst.add("Austin");
	      lst.add("Vaughn");
	      lst.add("Richard");
	      lst.add("Jonathan");
	      System.out.println("My groups consists of: ");
	      System.out.println(lst);     // [alpha, beta, charlie]
		
		// If you want to add/remove items from only the end of your list, use an ArrayList.
	    // If you want to add/remove items in the middle, use a LinkedList.
	      
	      
		// ArrayList
	    // Manage arrays internally.
	      ArrayList<Integer> age = new ArrayList<Integer>();
	      
	    //Adding
	      age.add(24);
	      age.add(23);
	      age.add(25);
	      age.add(24);
	      age.add(22);
	      
	    // Retrieving
	      System.out.println(age.get(3));
	      
	      System.out.println("\nDisplaying the ArrayList: ");
	    // Loop iteration
	      for(int i = 0; i < age.size(); i++){
	    	  System.out.println(age.get(i));
	      }
		
	    // Removing items
	      age.remove(age.size() - 1);
		
	    // Slow way to remove items
	      age.remove(0);
		
	      System.out.println("\nDisplaying the ArrayList another way: ");
	    // Another way
	      for(Integer value: age) {
	    	  System.out.println(value);
	      }
	      
	      System.out.println();
	      
	      // Linked List
	      // Consist of elements, each element has a reference to the 
	      // previous and next element.
	      LinkedList<Integer> linkedList = new LinkedList<Integer>();
	      System.out.println("Linked List:");
	      
	      // Add items to end of LinkedList
	      for(int i=0; i < 50; i++){
	    	  linkedList.add(i);
	      }
	      
	      // Add items anyway in LinkedList
	      for(int i=0; i < 50; i++){
	    	  linkedList.add(0, i);
	      }
	      
	      for(int i=0; i < linkedList.size(); i++){
	    	  System.out.print(linkedList.get(i) + ", ");
	      }
	      
	      System.out.println("\n");
	      
	      // HashMap
	      // Key-Value pairs
	      // If you have duplicate keys, the 2nd key overrides the 1st key
	      // Does not maintain order
	      HashMap<Integer, String> map = new HashMap<Integer, String>();
	      System.out.println("HashMap:");
	      
	      map.put(1, "One");
	      map.put(2, "Two");
	      map.put(3, "Three");
	      map.put(4, "Four");
	      map.put(5, "Five");
	      
	      String text = map.get(4);
	      
	      System.out.println(text);
	      
	      for(Map.Entry<Integer, String> entry: map.entrySet()) {
	    	  int key = entry.getKey();
	    	  
	    	  String value = entry.getValue();
	    	  
	    	  System.out.println(key + ":" + value);
	      }
	      
	      
	      
	      // Sorted Maps
	      // Maintains order
	      LinkedHashMap<Integer, String> linkedMap = new LinkedHashMap<Integer, String>();
	      TreeMap<Integer, String> treeMap = new TreeMap<Integer, String>();
	      
	      // LinkedHashMap will keep the keys in the order that they are given.
	      System.out.println("This is a LinkedHashMap");
	      testMap(linkedMap);
	      // TreeMap will sort the keys and keep them in order
	      System.out.println("This is a TreeMap");
	      testMap(treeMap);
	      
	}    
	      public static void testMap(Map<Integer, String> map) {	    	  
	    	  map.put(9, "Hinkley");
	    	  map.put(1, "Hart");
	    	  map.put(4, "Smith");
	    	  map.put(7, "I-Center");
	    	  map.put(10, "Ricks");
	    	  map.put(3, "MC");	    	  
	    	  
	    	  for(Integer key: map.keySet()) {
	    		  String value = map.get(key);
	    		  
	    		  System.out.println(key + ":" + value);
	    	  }
	      }
	

}
