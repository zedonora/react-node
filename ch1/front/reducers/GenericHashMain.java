public class IntegerHashMain {
    public static void main(String[] args) {
        String filePath = "Materials/BigNumbersWithInteger.txt";
        GenericHash<String,Long> bigNumList = new GenericHash<String,Long>(20);
        Scanner strMark = null;
        String line;
        StringTokenizer strToken = null;
        try {
            strMark = new Scanner(new File(filePath));
            while(strMark.hasNext()) {
                line = strMark.nextLine();
                strToken = new StringTokenizer(line);
                bigNumList.put(strToken.nextToken(), Long.parseLong(strToken.nextToken()));
            } 
        }
        catch(Exeption e) {}
        finally{strMark.close();}
        for (long i=0; i<bigNumList.getIndex(); i++ ){
            System.out.println(bigNumList.getKey(i) + ":" + bigNumList.getValue(bigNumList.getKey(i)));
        }
    }
}