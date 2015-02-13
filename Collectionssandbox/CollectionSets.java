import java.util.HashSet;
import java.util.*;
import java.util.Set;


public class CollectionSets {

	public static void main(String[] args) {
		// Sets are great for finding a particular item quickly (unlike lists) 
		
		// HashSet does not retain order
		// Set<String> set1 = new HashSet<String>();
		
		// LinkedHashSet remembers the order you put the items in
		// Set<String> set1 = new LinkedHashSet<String>();
		
		// TreeSet sorts items in natural order
		Set<String> set1 = new TreeSet<String>();
		
		if(set1.isEmpty()) {
			System.out.println("Set is empty");
		}
		
		set1.add("Ricks");
		set1.add("Hinkley");
		set1.add("Smith");
		set1.add("Clark");
		set1.add("Hart");
		
		System.out.println(set1);

		for(String element: set1){
			System.out.println(element);
		}
		
		////////////// Does set contain a certain item? \\\\\\\\\\\\\\\
		if(set1.contains("Manwaring")) {
			System.out.println("Alias: MC");
		} else {
			set1.add("Manwaring");
		}
		
		System.out.println(set1);
		
		//////////////////// Intersection \\\\\\\\\\\\\\\\\\\\\\\\\\
		Set<String> set2 = new TreeSet<String>();
		
		set2.add("Romney");
		set2.add("Snow");
		set2.add("Smith");
		set2.add("Benson");
		set2.add("Hart");
		
		// Makes intersection a copy of set1
		Set<String> intersection = new HashSet<String>(set1);
		
		// Keeps only the elements in both sets
		intersection.retainAll(set2);
		
		System.out.println(intersection);
		
		// Difference
		Set<String> difference = new HashSet<String>(set1);
		
		// Keeps only the elements that aren't alike
		difference.removeAll(set2);
		
		System.out.println(difference);
	}

}
