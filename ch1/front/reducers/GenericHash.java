public class GenericHash<K,V> {
    private Object[] hashKey;
    private Object[] hashValue;
    private int length;
    private int index=0;

    public GenericHash(int length) {
        hashKey = new Object[length];
        hashValue = new Object[length];
        this.length = length;
    }

    public K getKey(int i) {
        return (K)hashKey[i];
    }

    public V getValue(K key) {
        int i=0;
        V returnValue = null;
        for(i=0; i<length; i++) {
            if((K)hashKey[i] == key) returnValue = (V)this.hashValue[i];
        }
        return returnValue;
    }
}