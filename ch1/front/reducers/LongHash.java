public class LongHash {
    private Object[] hashKey;
    private Object[] hashValue;
    private int length;
    private int index=0;

    public LongHash(int length) {
        hashKey = new Object[length];
        hashValue = new Object[length];
        this.length = length;
    }

    public String getKey(int i) {
        return (String)hashKey[i];
    }

    public Long getValue(String key) {
        int i=0;
        Long returnValue = null;
        for(i=0; i<length; i++) {
            if((String)hashKey[i] == key) returnValue = (Long)this.hashValue[i];
        }
        return returnValue;
    }
}